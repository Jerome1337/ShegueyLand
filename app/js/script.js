$(document).ready(function() {
    $('.open').click(function(){
        $('.menu_left nav').toggleClass( 'show' );
        $('.shadowClose').toggleClass( 'showHide' );
    });
    $('.shadowClose').click(function(){
        $('.menu_left nav').removeClass( 'show' );
        $('.shadowClose').removeClass( 'showHide' );
    });
});

function loadGallery(type_data, orderBy) {
    var lastImageLoaded = $(".likePic").last().attr("data-id");
    if(typeof lastImageLoaded === 'undefined') {
        lastImageLoaded = '9999';
    }
    // console.log("LOADING MORE SHEG " + lastImageLoaded);
    $.ajax({
        type: "POST",
        url: "commons/function.php",
        data: { getMoreSheguey: lastImageLoaded, typeData: type_data, orderBy: orderBy }
    })
    .done(function( imagesLoaded ) {
        $( imagesLoaded ).appendTo(".js-shegueyWall");
        lastImageLoaded = $(imagesLoaded).find(".likePic").last().attr("data-id");
        console.log("NEW : LOADING MORE SHEG " + lastImageLoaded);
    });
}

function deleteGallery(){
    $(".js-shegueyWall").empty();
}

function setParamsGallery(){
    var orderBy = $('.orderBy:checked', '.formOptions').val();
    orderBy = (typeof orderBy === 'undefined') ? 'recent' : orderBy;
    console.log('orderBy : ' + orderBy);
    
    var mediaContent = [];
    $('.mediaContent:checked', '.formOptions').each(function(i){
      mediaContent[i] = $(this).val();
    });
    
    var mediaRequest = mediaContent.toString();
    if(mediaRequest != "images" && mediaRequest !="videos") {
        mediaRequest = "both";
        $('.mediaContent').prop('checked', true); // Coche les 2 case si non defini
    }

    console.log('mediaRequest = ' + mediaRequest);
    // console.log("orderBy : " + orderBy);
    loadGallery(mediaRequest, orderBy);
}

function likeMedia(id_media){
    $.ajax({
        type: "POST",
        url: "commons/function.php",
        data: { vote_media_ID: id_media }
    })
    .done(function( vote_saved ) {
        $( vote_saved ).appendTo(".likePic");
        console.log("SAVE " + vote_saved);
    });
}

// Appel des fonctions
$(document).ready(function() {
    $('.getMoreSheg').click(function(){
        setParamsGallery();     
    });

    $('.formOptions input').click(function(){
        deleteGallery();
        setParamsGallery();
    });

});

$(document).on('click', '.likePic', function() {
        var vote_id = $(this).attr("data-id");
        likeMedia(vote_id);
        console.log('vote_id: ' + vote_id);
});


// SOUNDS
$(document).ready(function() {
    $('.sound').find('div').on('click touchstart', function() {
        var soundId = this.id;
        $('soundId').trigger('load');
        tag = document.createElement('audio');
        tag.setAttribute("preload", "auto")
        tag.setAttribute("src", "sound/" + soundId + ".wav")
        tag.play();
        // console.log("playyyyy");
        // console.log(soundId);
    });
});

// ADD PUNCH ACTION
$(document).ready(function() {
    var textMax = 150;
    $('#punchAdded p').html(textMax + ' caractères restant.');
    $('#formPunchline').keyup(function(){
        var textChar = $('#formPunchline').val().length;
        var textRemaining = textMax - textChar;
        $('#punchAdded p').html(textRemaining + ' caractères restant.');
    });
    $('#formPunch').submit(function(event) {
        var dataPunch = {
            'mc' : $('#formMc').val(),
            'punch' : $("#formPunchline").val()
        };
        // console.log(formData);
        $.ajax({
            url: "commons/postpunch.php",
            type: "POST",
            data: dataPunch,
            dataType: 'json',
            encode: true
        })
        .done(function(data){
            console.log(dataPunch);
            console.log(data);

            if( ! data.success){
                $('#punchAdded h2').append('Remplis tous les champs !').hide().slideDown();
            }else{
                $('#punchAdded h2').append('Ta punchline vient d\'être envoyée !').hide().slideDown();
            }
        });
        event.preventDefault();
    });
});
// END ADD PUNCH ACTION

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
$(document).ready(function() {
    var score = 0;
    $('.buttonPass').click(function() {
        $(this).parent().removeClass('active').parent().next().children().addClass('active');
    });
    $('.restartQuizz').click(function() {
        $(this).parent().removeClass('active');
        $('.quizz div div').addClass('active');
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
                changeMeta('J\'ai obtenu le grade de Sergent Sheguey', 'shegueysergent');
                resultSheguey('Sergent Sheguey');
                break;
            case 4:
            case 5:
                changeMeta('J\'ai obtenu le grade de Général Sheguey', 'shegueygeneral');
                resultSheguey('Général Sheguey');
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
        };
    };

        function resultSheguey(result) {
            $('.resultSheguey span').append(result);
        };
});

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
    $(document).ready(function() {
        $('#formContact').submit(function(event) {
            // var formName    = $('#formName').val();
            // var formEmail   = $("#formEmail").val();
            // var formSubject = $("#formSubject").val();
            // var formMessage = $("#formMessage").val();

            var formData = {
                'name' : $('#formName').val(),
                'email' : $("#formEmail").val(),
                'subject' : $("#formSubject").val(),
                'message' : $("#formMessage").val()
            };
            // console.log(formData);
            $.ajax({
                url: "commons/postmessage.php",
                type: "POST",
                data: formData,
                dataType: 'json',
                encode: true
            })
            .done(function(data){
                console.log(formData);
                console.log(data);

                if( ! data.success){
                    alert('Error');
                }else{
                    alert('Success');
                }
            });
            event.preventDefault();
        });
    });
    // END CONTACT FORM ACTION

    // END CONTACTS

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
    $(".twitter").click(function() {
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