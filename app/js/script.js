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

function loadGallery(type_data, orderBy, contentLengthToLoad) {
    var lastImageLoaded = $(".likePic").last().attr("data-id");
    if(typeof lastImageLoaded == 'undefined') {
        lastImageLoaded = '9999';
    }
    // console.log("LOADING MORE SHEG " + lastImageLoaded);
    $.ajax({
        type: "POST",
        url: "commons/function",
        data: { getMoreSheguey: lastImageLoaded, typeData: type_data, orderBy: orderBy, contentLength: contentLengthToLoad }
    })
    .done(function( imagesLoaded ) {
        $( imagesLoaded ).appendTo(".js-shegueyWall");
        lastImageLoaded = $(imagesLoaded).find(".likePic").last().attr("data-id");
        // console.log("NEW : LOADING MORE SHEG " + lastImageLoaded);
    });
}

function deleteGallery(){
    $(".js-shegueyWall").empty();
}

function setParamsGallery(){

    //Order asked
    var orderBy = $('.orderBy:checked', '.formOptions').val();
    orderBy = (typeof orderBy === 'undefined') ? 'recent' : orderBy;
    if(orderBy === 'recent'){
        var contentLengthToLoad = '8';
         $('.getMoreSheg').show();
    } else {
        var contentLengthToLoad = '32';
        $('.getMoreSheg').hide();
    }

    var contentLengthToLoad = (orderBy === 'recent') ? '8' : '32'; // Si l'affichage par vote, affiche 32pics.
    // console.log('orderBy : ' + orderBy);
    
    // Type of content
    var mediaContent = [];
    $('.mediaContent:checked', '.formOptions').each(function(i){
      mediaContent[i] = $(this).val();
    });
    var mediaRequest = mediaContent.toString();
    if(mediaRequest != "images" && mediaRequest !="videos") {
        mediaRequest = "both";
        $('.mediaContent').prop('checked', true); // Coche les 2 case si non defini
    }

    // console.log('mediaRequest = ' + mediaRequest);
    // console.log("orderBy : " + orderBy);
    loadGallery(mediaRequest, orderBy, contentLengthToLoad);
}

function likeMedia(id_media){
    // console.log("monIPEST: " + ip_client);
    $.ajax({
        type: "POST",
        url: "commons/function",
        data: { vote_media_ID: id_media, ip_client: ip_client }
    })
    .done(function( vote_saved ) {
        $( vote_saved ).appendTo(".likePic");
        // console.log("SAVE " + vote_saved);
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

    $('.orderPicsBy').click(function(){
        $('.field.select').toggleClass('active');
    });
    $('.select label').click(function(){
        // console.log('labelClick');
        $('.field.select').removeClass('active');
    });

});

$(document).on('click', '.likePic', function() {
        var vote_id = $(this).attr("data-id");
        $(this).addClass('liked');
        likeMedia(vote_id);
        // console.log('vote_id: ' + vote_id);
});


// SOUNDS
$(document).ready(function() {
    $('.sound').find('div').on('click', function() {
        var soundId = this.id;
        $('soundId').trigger('load');
        tag = document.createElement('audio');
        tag.setAttribute("preload", "auto")
        tag.setAttribute("src", "sound/" + soundId + ".wav")
        tag.play();
    });
});

/*$(document).ready(function() {
    $('.sound').find('div').click(function(){
            $(this).addClass('playing');
            if ($('.sound').find('div').hasClass('playing')){
            this.pause();
            this.currentTime = 0;
            this.removeClass('playing');
            $(function() {
                var soundId = this.id;
                $('soundId').trigger('load');
                tag = document.createElement('audio');
                tag.setAttribute("preload", "auto")
                tag.setAttribute("src", "sound/" + soundId + ".wav")
                tag.play();
            });
        }else{
        }
    });
});*/

// ADD PUNCH ACTION
$(document).ready(function() {
    var textMax = 150;
    $('#punchAdded').hide();
    $('#formPunch p').html(textMax + ' / 150 caractères.');
    $('#formPunchline[maxlength]').keyup(function(){
        var limit = parseInt($(this).attr('maxlenght'));
        var text = $(this).val();
        var chars = text.length;
        if(chars > limit){
            var new_text = text.substr(0, limit);
            $(this).val(new_text);
        }
        var textChar = $('#formPunchline').val().length;
        var textRemaining = textMax - textChar;
        $('#formPunch p').html(textRemaining + ' / 150 caractères.');
    });
    $('#formPunch').submit(function(event) {
        console.log('ip_client: ' + ip_client);
        var newMc = $('#formMc').val();
        var addedPunch = $("#formPunchline").val();
        var dataPunch = {
            'mc' : newMc,
            'punch' : addedPunch,
            'ip_client': ip_client
        };
        console.log(dataPunch);
        $.ajax({
            type: "POST",
            url: "commons/function.php",
            dataType: 'json',
            encode: true,
            data: dataPunch
        })
        .done(function(data){
            // console.log(dataPunch);
            // console.log(data);
            // console.log("haha");

            if( data.success){
                $('#punchAdded').slideDown().children().append('Ta punchline vient d\'être envoyée !');
                $('.newPunch').append('<div><p class="punchline">'+addedPunch+'</p><h2 class="mc">'+newMc+'</h2></div>');
                $('.addPunch').slideUp('slow');
            }else{
                $('#punchAdded').slideDown().children().append('Remplis tous les champs !');
                // console.log(data);
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
        $(this).parent().parent().removeClass('active').next().addClass('active');
    });
    $('.good').click(function() {
        score++;
        // console.log('score: ' + score);
    });
    $('.final').click(function() {
        setScore();
    });

    function setScore() {
        switch (score) {
            case 0:
            case 1:
                changeMeta('shegueycarton');
                resultSheguey('Sheguey en carton', 'Tu ne t’y connais vraiment pas, mais on t’aime quand même. Tu va devoir travailler dûr pour devenir un vrai Sheguey, tu peux commencer dès mainteanant par <a href="http://www.amazon.fr/gp/product/B00RDC5Y5O/ref=as_li_tl?ie=UTF8&camp=1642&creative=19458&creativeASIN=B00RDC5Y5O&linkCode=as2&tag=francemixtape-21&linkId=BLAT3PC4OXRC5SZP" target="_blank">acheter l’album</a> ou télécharger la mixtape sur <a href="www.hauteculture.com" target="_blank">HauteCulture.com</a>.', '<img src="img/fbshare/shegueycarton.jpg" alt="Facebook share en carton">');
                break;
            case 2:
            case 3:
                changeMeta('shegueysoldat');
                resultSheguey('Soldat Sheguey', 'Tu es tous les jour sur le terrain, le soldat est indispensable au Sheguey Mouvement. Il va falloir pousser la fonte pour atteindre le grade suppérieur.', '<img src="img/fbshare/shegueysoldat.jpg" alt="Facebook share soldat">');
                break;
            case 4:
                changeMeta('shegueysergent');
                resultSheguey('Sergent Sheguey', 'Tes connaissance de la Sheguatitude sont impressionnante, encore quelques tractions necessaires pour atteindre le grade supérieur', '<img src="img/fbshare/shegueysergent.jpg" alt="Facebook share sergent">');
                break;
            case 5:
                changeMeta('shegueygeneral');
                resultSheguey('Général Sheguey', 'Tu es un vrai sheguey, et tu t’es probablement fait tatoué SHEGUEY SQUAD sur la fesse droite. <strong>#VraiShegueyAVie</strong>', '<img src="img/fbshare/shegueygeneral.jpg" alt="Facebook share général">');
                break;
        }

        function changeMeta(image) {
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

        function resultSheguey(grade, desc, imgfb) {
            $('.resultSheguey span').append(grade);
            $('.resultSheguey p').append(desc);
            $('.previewFb div').append(imgfb);
            $('.previewFb h3 span').append(grade);
            $('.previewFb p').append(desc);
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
        $('.rangSheguey').hide();
        $('#formContact').submit(function(event) {
            // var formName    = $('#formName').val();
            // var formEmail   = $("#formEmail").val();
            // var formSubject = $("#formSubject").val();
            // var formMessage = $("#formMessage").val();

            var formData = {
                'name' : $('#formName').val(),
                'email' : $("#formEmail").val(),
                'message' : $("#formMessage").val()
            };
            // console.log(formData);
            $.ajax({
                url: "commons/postmessage",
                type: "POST",
                data: formData,
                dataType: 'json',
                encode: true
            })
            .done(function(data){
                // console.log(formData);
                // console.log(data);


            if( !data.success){
                $('.rangSheguey').slideDown().children().append('Remplis tous les champs !');
            }else{
                $('.rangSheguey').slideDown().children().append('Ton message vient d\'être envoyé !');
                $('#formContact').slideUp('slow');
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
                // console.log('Status updated!');
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