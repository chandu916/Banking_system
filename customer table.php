<html>
    <head>
        <style>
            @import url(css.css);
*{
    box-sizing: border-box;
    margin: 0%;
    margin-top: 10px;
}
body{
    background:black;
    color: white;
}
table{
    max-width:1300px;
    margin: 10px;
    
}
.myself{
    box-sizing: border-box;
    border: 1mm solid white;
}
/* responsive styling table */
/* @media(max-width:100px){
   table{
       margin: 20px;
   }

} */
        </style>

    </head>
    <body>
        <section class="myself">
           <div class="max-width">
            <div>
                <?php
                $user_name=$_GET["username"];
                $user_email=$_GET["email"];
                echo'<table border="1">';
                echo"<tr>
                    <th>name</th>
                    <th>email</th>";
                echo"<tr>
                     <td>$user_name</td>
                     <td>$user_email</td>
                     </tr>";

                ?>
            </div>
            <div class="mny-trnsfr">
                <input type="button">
            </div>
           </div>

        </section>
        <section class="cstmr-details">
            <div class="max-width">
                <table border="1">
                    <thead>
                        <tr>
                            <th>SL.NO</th>
                            <th>CUSTOMER NAME</th>
                            <th>EMAIL ID</th>
                            <th>BANK BALANCE( )</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Arjun</td>
                            <td>arjun@email.com</td>
                            <td>
                                <p>4500</p>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Suresh</td>
                            <td>suresh@email.com</td>
                            <td>
                                <p >24000</p>
                            </td>
                        </tr>
                        <tr >
                            <td>3</td>
                            <td>Abhi</td>
                            <td>abhi@email.com</td>
                            <td>
                                <p>3400</p>
                            </td>
                        </tr>
                    
                </table>
            </div>
        </section>
    </body>
</html>