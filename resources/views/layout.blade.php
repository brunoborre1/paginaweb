
<style>

ul{
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    background: #008B8B;
    overflow: hidden;
}

li{
    float: left;
}

li a{
    display: block;
    color: white;
    text-align: center;
    padding: 16px 16px;
    text-decoration: none;
}

li a:visited{
    color: #AFEEEE;
}

li a:hover{
    background-color: #B0C4DE;
    color: #A52A2A;
}

body {
    padding: 5px;
    margin: 10px;
}


</style>

<nav class="navegacion">
    <ul>
        <li><a href="{{route('home')}}">Inicio</a></li>
        <li><a href="{{route('contact')}}">Contacto</a></li>
        <li><a href="{{route('about')}}">Nosotros</a></li>
    </ul>
</nav>
