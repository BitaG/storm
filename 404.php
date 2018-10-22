<?php include_once ('header.php');?>

    <style>
        body{
            background:#0c2461;
            color: #fff;
            background-image: url("/assets/images/stars.svg");
            min-height: 100vh;
        }
        a, a:hover{
            text-decoration: none;
        }
        a.back{
            display: inline-block;
            margin-top: 50px;
            background: #009FDE !important;
            color:white;
            padding: 20px 30px;
            -webkit-border-radius: 14px;
            -moz-border-radius: 14px;
            border-radius: 14px;
            font-size: 2.2rem;
            text-transform: uppercase;
            box-shadow: inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
            position:relative;
        }
        a.back:active{
            top: 0.1em;
        }
        div.p{
            padding-top: 20vh;
        }
    </style>

    <section>
        <div class="container">
            <div class="row">
                <div class=" col-12 text-center p">
                    <img height="320px" src="/assets/images/error.svg"/>
                    <div class="pt-5">
                        <h1>Ooops.. 404 page!</h1>
                        <p>page not found</p>
                        <a class="back h6" href="/">Back</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php include_once ('footer.php');?>