// SOUNDS
$(document).ready(function() {
    $('.conteneur').find('div').click(function() {
        var soundId = this.id;
        $('soundId').trigger('load');
        function im(element, image) {
            element.src=image
        }
        id=0;
        zone = document.getElementById("audioElements");
        tag = document.createElement('audio');
        tag.setAttribute("preload", "auto")
        tag.setAttribute("autoplay", "autoplay")
        tag.setAttribute("src", "snd/" + soundId + ".wav")
        tag.setAttribute("id","audio"+id)
        zone.appendChild(tag)
        tag.play();
        setTimeout("x=document.getElementById('audio"+id+"');x.parentNode.removeChild(x);", 3500)
        id++;
        buttonClicked()
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


// QUIZZ

$(function() {

    // ANIMS
    $("#launchQuizz").click(function() {
        $("#startQuizz").slideUp("slow");
        $("#q1").slideDown("slow");
    });

    $("#q1 p").click(function() {
        $("#q1").slideUp("slow");
        $("#q2").slideDown("slow");
    });

    $("#q2 p").click(function() {
        $("#q2").slideUp("slow");
        $("#q3").slideDown("slow");
    });

    $("#q3 p").click(function() {
        $("#q3").slideUp("slow");
        $("#q4").slideDown("slow");
    });

    $("#q4 p").click(function() {
        $("#q4").slideUp("slow");
        $("#q5").slideDown("slow");
    });

    $("#q5 p").click(function() {
        $("#q5").slideUp("slow");
        $("#formSubmit").slideDown("slow");
    });

    $("#formSubmit").click(function() {
        $("#formSubmit").slideUp("slow");
        $("#resultForm").slideDown("slow");
    });

    $("#restartForm").click(function() {
        $("#resultForm").slideUp("slow");
        $("#startForm").slideDown("slow");
    });
    // END ANIMS

    // ADD VAL
    $("#setDate1").click(function() {
        $("#date").val("1");
    });
    $("#setDate2").click(function() {
        $("#date").val("2");
    });

    $("#setLike1").click(function() {
        $("#like").val("1");
    });
    $("#setLike2").click(function() {
        $("#like").val("2");
    });
    $("#setLike3").click(function() {
        $("#like").val("3");
    });
    $("#setLike4").click(function() {
        $("#like").val("4");
    });

    $("#setExtrait1").click(function() {
        $("#extrait").val("1");
    });
    $("#setExtrait2").click(function() {
        $("#extrait").val("2");
    });
    $("#setExtrait3").click(function() {
        $("#extrait").val("3");
    });
    $("#setExtrait4").click(function() {
        $("#extrait").val("4");
    });

    $("#setClip1").click(function() {
        $("#clip").val("1");
    });
    $("#setClip2").click(function() {
        $("#clip").val("2");
    });
    $("#setClip3").click(function() {
        $("#clip").val("3");
    });
    $("#setClip4").click(function() {
        $("#clip").val("4");
    });

    $("#setOut1").click(function() {
        $("#out").val("1");
    });
    $("#setOut2").click(function() {
        $("#out").val("2");
    });
    $("#setOut3").click(function() {
        $("#out").val("3");
    });
    $("#setOut4").click(function() {
        $("#out").val("4");
    });
    // END ADD VAL
});

// $(document).ready(function() {
//     $('.agepatient').keypress(function(key) {
//         if ((key.charCode < 48 || key.charCode > 57) && key.charCode != 0 && key.charCode != 8 && key.charCode != 9 && key.charCode != 46) return false;
//     });
//     var characters = 3;
//     $('.agepatient').keyup(function() {
//         if ($(this).val().length > characters) {
//             $(this).val($(this).val().substr(0, characters));
//         }
//     });
// });

// $(function() {

//     $('#formlife').submit(function() {

//         var sex, age, disease,
//             reste_vie, price_y_classic, price_y_od, sejour_classic, sejour_od, economie;

//         sex = $(this).find("input[name=sex]").val();
//         age = $(this).find(".agepatient").val();
//         disease = $(this).find("input[name=disease]").val();

//         console.log('data: ' + sex + age + disease);
//         price_y_classic = "21623";
//         price_y_od = "7345";

//         reste_vie = sex === "m" ? (88 - age) : (95 - age);
//         console.log(reste_vie);
//         reste_vie = reste_vie <= 4 ? 5 - disease : reste_vie - disease;
//         console.log("reste_vie: " + reste_vie);

//         sejour_classic = reste_vie * price_y_classic;
//         sejour_od = reste_vie * price_y_od;

//         console.log('sejour classique: ' + sejour_classic);
//         console.log('sejour Oldeal: ' + sejour_od);

//         economie = sejour_classic - sejour_od;
//         console.log('Economie: ' + economie);

//         if (age > 120 || age < 75) {
//             $("#resultForm h6").empty().append("Nous ne pouvons pas nous occuper de personnes de cet âge...");
//             return false;
//         }

//         if (economie > "600000") {
//             $("#resultForm h6").empty().append("Dans votre situation, merci de nous contacter pour en savoir plus");
//             return false;
//         }

//         $("#resultEco").empty().append("<h5>Grâce à Oldeal, vous pourriez économiser jusqu'à</h5>" + economie + "€*");
//         $("#resultForm h4").empty().append("* en <span>" + reste_vie + "</span> ans");

//         return false;
//     });

// });

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
        FB.getLoginStatus(function(){
            console.log('Status updated!');
        });
    });
    $('#share_button').click(function(e) {
        e.preventDefault();
        FB.ui({
            method: 'share',
            display: 'popup',
            href: 'http://sheguey.land/'
            // name: 'SHEGUEY',
            // caption: 'An example caption',
            // description: "aaaaaaa",
            // picture: 'http://sheguey.land/fbshare.jpg'
        });
    });
});

// END FB SHARE

// END QUIZZ


// CONTACTS

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

// END CONTACTS

// ANALYTICS

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57812247-1', 'auto');
  ga('send', 'pageview');

// END ANALYTICS