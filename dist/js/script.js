// SOUNDS
$(document).ready(function() {
    $('.conteneur').find('button').on('click touchstart', function() {
        var soundId = this.id;
        $('soundId').trigger('load');
        tag = document.createElement('audio');
        tag.setAttribute("preload", "auto")
        tag.setAttribute("src", "snd/" + soundId + ".mp3")
        tag.play();
        // console.log("playyyyy");
        // console.log(soundId);
    });
});

// Check si une nouvelle version du cache est disponible.
window.addEventListener('load', function(e) {

    window.applicationCache.addEventListener('updateready', function(e) {
        if (window.applicationCache.status == window.applicationCache.UPDATEREADY) {
            // Le navigateur a télécharger la nouvelle version.
            if (confirm('A new version of this site is available. Load it?')) {
                window.location.reload();
            }
        } else {
            // Rien ne se passe
        }
    }, false);
}, false);

// END SOUNDS

// ADD PUNCH
    $(function() {
        $('#formPunch').submit(function() {
            $("#ajax-loader").show();
            formMc = $(this).find("input[name=mc]").val();
            formPunch = $(this).find("textarea[name=punch]").val();
            console.log(formMc);
            console.log(formPunch);
            $.post("commons/postpunch.php", {
                mc: formMc,
                punch: formPunch
            }, function(data) {
                $("#ajax-loader").hide();
                console.log(data);
                if (data != "ok") {
                    $(".alert-box").removeClass("success").addClass("alert").slideDown("slow").empty().append(data);
                } else {
                    $(".alert-box").slideUp("slow");
                    $(".punchAdded").delay(800).slideDown("slow").empty().append("<h1>Ta punchline à bien été postée</h1>");
                }
            });
            return false;
        });
    });

// END ADD PUNCH


// QUIZZ
$(document).ready(function() {
    var score = 0;
    $('.buttonPass').click(function() {
        $(this).parent().removeClass('active').next().addClass('active');
    });
    $('.restartQuizz').click(function() {
        $(this).parent().removeClass('active');
        $('.quizz li').first().addClass('active');
        score = 0;
        $('.resultSheguey span').empty();
    });
    $('.good').click(function() {
        score++;
        console.log('score: ' + score);
    });
    $('.final').click(function() {
        setScore();
    });

    function setScore() {
        switch (score) {
            case 0:
                changeMeta('J\'ai obtenu le grade de Sheguey en carton', 'shegueycarton');
                resultSheguey('Sheguey en carton');
                break;
            case 1:
                changeMeta('J\'ai obtenu le grade de Soldat Sheguey', 'shegueysoldat');
                resultSheguey('Soldat Sheguey');
                break;
            case 2:
            case 3:
                changeMeta('J\'ai obtenu le grade de Caporal Sheguey', 'shegueycaporal');
                resultSheguey('Caporal Sheguey');
                break;
            case 4:
            case 5:
                changeMeta('J\'ai obtenu le grade de Sheguey Major', 'shegueymajor');
                resultSheguey('Sheguey Major');
                break;
        }

        function changeMeta(title, image) {
            var metas = document.getElementsByTagName('meta');
            for (i = 0; i < metas.length; i++) {
                if (metas[i].getAttribute('property') == 'og:image') {
                    metas[i].setAttribute('content', 'http://sheguey.land/' + image + '.jpg');
                }
                if (metas[i].getAttribute('property') == 'og:title') {
                    metas[i].setAttribute('content', title);
                }
            }
            $('#share_button').click(function(e) {
                e.preventDefault();
                FB.ui({
                    method: 'share',
                    display: 'popup',
                    href: 'http://sheguey.land/fbshare/'+image+''
                });
            });
            // $('#share_button').click(function(e) {
            //     e.preventDefault();
            //     FB.ui({
            //         method: 'share_open_graph',
            //         display: 'popup',
            //         action_type: 'shegueyland:share',
            //         action_properties: JSON.stringify({
            //             scrape: 'true',
            //             type: 'shegueyland:quiz',
            //             quiz: "http://sheguey.land/shegueymajor.php",
            //             title: title,
            //             description: 'Toi aussi vient faire le test pour découvrir quel Sheguey tu es !',
            //             image: 'http://sheguey.land/fbshare2.jpg'
            //         })
            //     })
            // });
        };
    };

        function resultSheguey(result) {
            $('.resultSheguey span').append(result);
        };
});

// END QUIZZ

// LOCAL STORAGE FORM
    jQuery(function($) {
        $.fn.formBackUp = function() {
            if (!localStorage) {
                return false;
            }
            var forms = this;
            var datas = {};
            var ls = false;
            datas.href = window.location.href;

            //Récupération des informations
            if (localStorage['formBackUp']) {
                ls = JSON.parse(localStorage['formBackUp']);
                if (ls.href == datas.href) {
                    for (var id in ls) {
                        if (id != 'href') {
                            $('#' + id).val(ls[id]);
                            datas[id] = ls[id];
                        }
                    }
                }
            }

            forms.find('input,textarea').keyup(function(e) {
                datas[$(this).attr('id')] = $(this).val();
                localStorage.setItem('formBackUp', JSON.stringify(datas));
            });
            forms.submit(function(e) {
                localStorage.removeItem('formBackUp');
            });
        }

        $('form').formBackUp();

    });
// END LOCAL STORAGE

    // CONTACT FORM ACTION
    $(function() {
        $('#formContact').submit(function() {
            $("#ajax-loader").show();

            formName = $(this).find("input[name=name]").val();
            formEmail = $(this).find("input[name=email]").val();
            formSubject = $(this).find("input[name=subject]").val();
            formMessage = $(this).find("textarea[name=message]").val();

            // console.log(formName);
            // console.log(formEmail);
            // console.log(formSubject);
            // console.log(formMessage);

            $.post("commons/postmessage.php", {
                name: formName,
                email: formEmail,
                subject: formSubject,
                message: formMessage
            }, function(data) {
                $("#ajax-loader").hide();
                console.log(data);
                if (data != "ok") {
                    $(".alert-box").removeClass("success").addClass("alert").slideDown("slow").empty().append(data);
                } else {
                    $(".alert-box").slideUp("slow");
                    $(".rangSheguey").delay(800).slideDown("slow").empty().append("<h1>Merci,</h1><p>votre message a bien été envoyé.</p>");
                }
            });
            return false;
        });
    });
    // END CONTACT FORM ACTION

    // FB SHARE

    $(document).ready(function() {
        $.ajaxSetup({
            cache: true
        });
        $.getScript('//connect.facebook.net/fr_FR/all.js', function() {
            FB.init({
                appId: '790279547711669',
            });
            $('#loginbutton,#feedbutton').removeAttr('disabled');
            FB.getLoginStatus(function() {
                console.log('Status updated!');
            });
        });
    });    

    // END FB SHARE

    // TWITTER
    $("#twitter").click(function() {
        var url = $(this).attr("data-url");
        window.open(url, "tweet", "height=300,width=550,resizable=1");
    });

    // END TWITTER

    // ANALYTICS

    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-57812247-1', 'auto');
    ga('send', 'pageview');

// END ANALYTICS