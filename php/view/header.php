
   <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&family=Vujahday+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
  *{
    margin: 0;
    padding: 0; 
}
.contanier{
    color #111;
    padding: 50px;
    display: grid;
    grid-template-columns: repeat(3,1fr);
    grid-template-rows: 1fr;
    grid-template-areas: "logo menu icon";
    align-items: center;
}
h2{
    font-family: 'Source Sans Pro', sans-serif;
    font-family: 'Vujahday Script', cursive;
    font-size: 30px;
    grid-area: logo;
    text-align: center;
}
ul{
    grid-area: menu;
    list-style: none;
    justify-self: center;
}
ul li{
    display: inline-block;
    margin: 0 17px;
}
#icon{
    grid-area: icon;
}
ul li a{
    color: #111;
    text-decoration: none;
    font-size: 17px;
}
ul li a:hover{
    color: rgb(9, 128, 197);
}
nav a{
    justify-self: center;
} 
.label ,#open-menu{
    display:none;
}
@media screen and (max-width:812px){
    .contanier{
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 90px 1fr;
        grid-template-areas: 
        "logo hamburger"
        "menu menu";
        height: auto;
    }
    .label{
        display: block;
        font-size: 30px;
        justify-self: end;
    }
    ul{
        display: none;
    }
    #open-menu:checked +ul{
        width: 100%;
        grid-area: menu;
        justify-content: center;
        align-items: center;
        height: calc(100vh - 90px);
        display: flex;
        flex-direction: column;
    }
    #icon{
       margin-left: 30px;
       margin-top: -100px;
    }
    #open-menu:checked + ul li{
        display: block;
        font-size: 30px;
        margin: 15px 0;
    }
    footer{
        margin-top: 45px;
        height: 550px;
        background-color: #111;
        color: whitesmoke;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: repeat(3,1fr);
        grid-template-areas: 
        "location"
        " connect"
        " contact";
        text-align: center;
    }

}

    </style>  
    </head>
    <nav class="contanier" class="animated slideInLeft ">
            <h2>O H S </h2> 
            <label class="label" for="open-menu">&#9776</label>
            <input  type="checkbox" id="open-menu">
    
    
            <ul>
                <li> <a href="home.php">Home</a> </li>
                <li><a href="product.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="register.php">Account</a></li>
                <li><a href="aboutus.php">About us</a></li>
                
               
            </ul>
            <a href="register.php" id="icon" ><i class="	fa fa-user-o" style="font-size:24px; " ></i ></a>
        </nav>