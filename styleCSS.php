.container-fluid {
    padding: 0;
}

#testimonials {
    text-align: center;
    padding: auto;
}

.testimonials-image {
    width: 100%;
    height: 100%;
}

.navbar {
    background-color: none;
    height: 20%;
}

.pic1 {
    width: 500px;
    height: 700px;
    margin-left: 125px;
}

.pic2 {
    width: 500px;
    height: 700px;
    margin-left: 300px;
}

/* .row::after {
  content: "";
  clear: both;
  display: table;
} */
.navbar-brand {
    color: black;
}
.nav-link {
    color: black;
}
.column1 {
    float: left;
    width: 33.33%;
    padding: 5px;
    padding-left: 40px;
    padding-right: 40px;
}
/* .row1::after {
  content: "";
  clear: both;
  display: table;
} */
.new {
    padding-left: 40%;
    /* width: 50%; */
    height: 100px;
    /* border: 1px solid #c3c3c3; */
    display: flex;
    flex-wrap: wrap;
    align-content: center;
}
.history {
    font-style: italic;
    padding-left: 10%;
}
.his {
    padding-left: 5%;
}
.nav-item:hover {
    color: brown;
}

/* ---------- */

@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

.container{
    padding:0; margin:0;
    box-sizing: border-box;
    color:#d9d9d9;
    font-family: 'Open Sans', sans-serif;
}

footer{
    bottom: 0;
    width: 100%;
    background-color: #053742;
}

.container{
    display: flex;
    padding: 3rem;
}

.container .section{
    flex-basis: 50%;
    padding: 0 20px;
}

.section h2{
    font-size: 1.125rem;
    font-weight: 600;
    text-transform: uppercase;
}

.section .content{
    margin:20px 0 0 0;
    position: relative;
}

.section .content::before{
    position: relative;
    content: '';
    top: -10px;
    height: 2px;
    width: 100%;
}

.section .content::after{
    position: relative;
    content: '';
    height: 2px;
    width: 15%;
    background-color: #dd5f24;
    top: -10px;
}

.left .content .social{
    margin: 20px 0 0 0;
}

.left .content .social a{
    padding: 0 2px;
}

.left .content .social a span{
    height: 40px;
    width: 40px;
    background: transparent;
    line-height: 40px;
    text-align: center;
    font-size: 18px;
    border-radius: 50px;
    transition: 0.4s;
    border:1px solid #656565;
}


.left .content .social a span:hover{
    background: #dd5f24;
}

.center .content .fas{
    font-size: 1.1rem;
    background: transparent;
    height: 45px;
    width: 45px;
    line-height: 45px;
    text-align: center;
    border-radius: 50px;
    transition: 0.3s;
    cursor: pointer;
    border:1px solid #656565;
}

.center .content .fas:hover{
    background: #dd5f24;
    border:1px solid #dd5f24;
}

.center .content .text{
    font-size: 1.0.6rem;
    font-weight: 500;
    padding-left: 10px;
}

.center .content .phone{
    margin: 15px 0;
}

.right form .text{
    font-size: 1.0625rem;
    margin-bottom: 2px;
    color: #656565;
}

.right form input{
    width: 100%;
    font-size: 1.0625rem;
    background: transparent;
    border: 1px solid #656565;
}

.right form input{
    height: 35px;
}

.right form .btn{
    margin-top: 10px;
}

.right form .btn button{
    height: 40px;
    width: 100%;
    border:none;
    outline: none;
    background: #dd5f24;
    font-size: 1.0625rem;
    font-weight: 500;
    cursor: pointer;
    transition: 0.3s;
}


.right form .btn button:hover{
    background: #000;
}

.footer-bottom center{
    padding: 5px;
    font-size: 0.9375rem;
    background: #151515;
}

.footer-bottom center span{
    color: #656565;
}

.footer-bottom center a{
    text-decoration: none;
}

.footer-bottom center a:hover{
    text-decoration: underline;
}

@media screen and (max-width:700px){
    footer{
        position: relative;
        bottom: 0px;
    }

    .left .content{
        padding-right:0px;
        padding-bottom: 30px;
    }

    .container{
        flex-wrap: wrap;
        flex-direction: column;
        padding:0.5rem;
    }

    .container .section{
        margin:5px 0;
    }
}

.column {
    width: 300px;
}
  
