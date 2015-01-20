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
            if (confirm('A new version of this site is available. Load it?')){
                window.location.reload();
            }
        } else {
            // Rien ne se passe
        }
    }, false);
}, false);

// END SOUNDS


// QUIZZ
$(document).ready(function(){
    var score = 0;
    $('.buttonPass').click(function(){
        $(this).parent().removeClass('active').next().addClass('active');
    });
    $('.restartQuizz').click(function(){
        $(this).parent().removeClass('active');
        $('.quizz li').first().addClass('active');
    });
    $('.good').click(function(){
        score++;
        console.log('score: ' + score);
    });
});

// END QUIZZ

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