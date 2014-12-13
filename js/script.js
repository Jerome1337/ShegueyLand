function playSheguey() {
	zone = document.getElementById("audioElements");
	tag = document.createElement('audio');
	tag.setAttribute("preload","auto")
	tag.setAttribute("autoplay","autoplay")
	tag.setAttribute("src","snd/sheguey.wav")
	tag.setAttribute("id","audio"+id)
	zone.appendChild(tag)
	tag.play()
	setTimeout("x=document.getElementById('audio"+id+"');x.parentNode.removeChild(x);", 3500)
	id++;
	buttonClicked()
}

function playMissile() {
	zone = document.getElementById("audioElements");
	tag = document.createElement('audio');
	tag.setAttribute("preload","auto")
	tag.setAttribute("autoplay","autoplay")
	tag.setAttribute("src","snd/missile.wav")
	tag.setAttribute("id","audio"+id)
	zone.appendChild(tag)
	tag.play()
	setTimeout("x=document.getElementById('audio"+id+"');x.parentNode.removeChild(x);", 3500)
	id++;
	buttonClicked()
}

function play59() {
	zone = document.getElementById("audioElements");
	tag = document.createElement('audio');
	tag.setAttribute("preload","auto")
	tag.setAttribute("autoplay","autoplay")
	tag.setAttribute("src","snd/59.wav")
	tag.setAttribute("id","audio"+id)
	zone.appendChild(tag)
	tag.play()
	setTimeout("x=document.getElementById('audio"+id+"');x.parentNode.removeChild(x);", 3500)
	id++;
	buttonClicked()
}

function playPapa() {
	zone = document.getElementById("audioElements");
	tag = document.createElement('audio');
	tag.setAttribute("preload","auto")
	tag.setAttribute("autoplay","autoplay")
	tag.setAttribute("src","snd/papa.wav")
	tag.setAttribute("id","audio"+id)
	zone.appendChild(tag)
	tag.play()
	setTimeout("x=document.getElementById('audio"+id+"');x.parentNode.removeChild(x);", 3500)
	id++;
	buttonClicked()
}

function playJmatte() {
	zone = document.getElementById("audioElements");
	tag = document.createElement('audio');
	tag.setAttribute("preload","auto")
	tag.setAttribute("autoplay","autoplay")
	tag.setAttribute("src","snd/jmatte.wav")
	tag.setAttribute("id","audio"+id)
	zone.appendChild(tag)
	tag.play()
	setTimeout("x=document.getElementById('audio"+id+"');x.parentNode.removeChild(x);", 3500)
	id++;
	buttonClicked()
}