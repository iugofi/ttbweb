

@extends('User.Layouts.layout')

@section('title', 'Test')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

<button id="clickBtn">Click Me To See PopUp</button>
    <div id="popup">
        <div class="popup-container">
            <div class="popup">
                <div class="close-popup" id="closeBtn"><a href="#">X</a></div>
                <h2>Custom Popup</h2>
                <div class="lg:text-start !flex items-center lg:justify-center justify-center img-top">
                            <img src="{{ asset('assets/img/image-one.jpg') }}" alt="" class="img-fluid">
                        </div>
                <a href="#" class="popup-btn">View Details</a>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap');
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
body{
    font-family: 'Poppins', sans-serif;
    position: relative;
}
button{
    background-color: rebeccapurple;
    outline: none;
    border: none;
    padding: 10px 20px;
    font-weight: bold;
    font-size: 1.5rem;
    color: #ffffff;
    margin: 30px;
    border-radius: 20px;
    box-shadow: 1px 6px 12px 0px rgb(0 0 0 / 13%);
    cursor: pointer;
    transition: .2s all ease-in-out;
}
button:hover{
    background-color: orange;
}
#popup{
    display: none;
}
.popup-container{
    height: 100vh;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    background-color: rgb(96 95 127 / 70%);
    position: absolute;
    top: 0;
    left: 0;
}
.popup{
    background-color: #ffffff;
    padding: 20px 30px;
    width: 50%;
    border-radius: 15px;
}
.close-popup{
    display: flex;
    justify-content: flex-end;
}
.close-popup a{
    font-size: 1.2rem;
    background-color: rebeccapurple;
    color: #fff;
    padding: 5px 10px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 10px;
    display: inline-block;
}
.popup > h2{
    font-size: 1.6rem;
    margin-bottom: 10px;
}
.popup > p{
    font-size: 1.2rem;
    margin-bottom: 10px;
}
.popup-btn{
    display: inline-block;
    text-decoration: none;
    border: 2px solid rebeccapurple;
    padding: 5px 15px;
    border-radius: 20px;
    margin: 10px 0px;
    transition: .2s all ease-in;
}
.popup-btn:hover{
    background-color: rebeccapurple;
    color: #fff;
}
    </style>

         
<script>
    const clickBtn = document.getElementById("clickBtn");
const popup = document.getElementById("popup");
const closeBtn = document.getElementById("closeBtn");

clickBtn.addEventListener('click', ()=>{
    popup.style.display = 'block';
});
closeBtn.addEventListener('click', ()=>{
    popup.style.display = 'none';
});
popup.addEventListener('click', ()=>{
    popup.style.display = 'none';
});
</script>


@endsection
