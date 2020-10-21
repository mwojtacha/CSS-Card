const rezerwacja={
    text: document.getElementById("text"),
    btn: document.getElementById("btn"),

    btn1:function(){
        this.text.innerHTML="ZAREZERWOWANO POMYŚLNIE";
    },

    init:function(){
        this.btn.addEventListener('click',this.btn1.bind(rezerwacja));
    },
}
rezerwacja.init();