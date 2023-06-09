<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php quiz</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php 
            $arr_Que=[
                ["quis"," what's html",["lange de style","lange de contenue","lange de datascience","nothing"],"lange de contenue"],
                ["quis","what's css",["lange de style","lange de contenue","lange de datascience","nothing"],"lange de style"],
                ["quis","what's JS",["lange de style","lange de contenue","lange de backend","nothing"],"lange de backend"],
                ["quis","attribue permet de ronder la bordure",["border","color: ??????","border-radius:??px","nothing"],"border-radius:??px"],
                ["quis","attribue permet de manipuler la bordure",["border","color: ??????","border-radius:??px","nothing"],"border"],
                ["quis","attribue pour preciser le source de d'image",["alt='  '","img","src=' '","nothing"],"src=' '"],
                ["quis","la balise pour routurner a la ligne:",["lange de style","lange de contenue","lange de backend","br>"],"br>"],
                ["quis","Quelle est la balise HTML utilisée pour créer un tableau ?",["table>","tr>","td>","th>"],"table>"],
                ["quis","Quelle balise HTML est utilisée pour insérer une image ?",["alt='  '","img>","src=' '","nothing"],"img>"],
                ["quis","Quelle est la balise HTML utilisée pour insérer une vidéo?",["video>","mp4>","source>","media>"],"video>"]  
            ];

        ?>

        <div class="boos">
            <div class="vice_boos">
                <div class="div3_header">
                    <?php
                        $nbr_itm_arr=count($arr_Que);
                      
                        for($i=0;$i<$nbr_itm_arr;$i++){
                            echo"<div class='respo_header'>";
                                echo"
                                    <div class='div4_tit'>
                                        <h1 class='tith11_tit'> quis <br> nbr q $i </h1>
                                    </div>";
                                echo"
                                    <div class='div5_Q'>
                                        <h3 class='tith31_Q'> Question: " . $arr_Que[$i][1] . "  </h3>
                                    </div>";
                            echo"</div>";
                        }
                    ?>
                    
                </div>
                <div class="div_form">
                    <form action="dev3 php qcm.php" method="post">
                        <div class="div6_body">
                            
                                <?php

                                    $nbr_itm_arr=count($arr_Que);
                                   
                                    for($i=0;$i<$nbr_itm_arr;$i++){
                                       
                                        echo"<div class='div7_container'>";
                                        echo
                                            "<div class='div8_pr'>
                                                <input type='radio' name='Question_$i' value='". $arr_Que[$i][2][0] ."'>
                                                <label for='Question_$i'>" . $arr_Que[$i][2][0] . "</label>
                                            </div>";
                                        echo
                                            "<div class='div9_pr div8_pr'>
                                                <input type='radio' name='Question_$i' value='". $arr_Que[$i][2][1] ."'>
                                                <label for='Question_$i'> ". $arr_Que[$i][2][1] ." </label>
                                            </div>";
                                        echo
                                            "<div class='div10_pr div8_pr'>
                                                <input type='radio' name='Question_$i' value='". $arr_Que[$i][2][2] ."'>
                                                <label for='Question_$i'> ". $arr_Que[$i][2][2] ." </label>
                                            </div>";
                                        echo
                                            "<div class='div11_pr div8_pr'>
                                                <input type='radio' name='Question_$i' value='". $arr_Que[$i][2][3] ."'>
                                                <label for='Question_$i'> ". $arr_Que[$i][2][3] ." </label>
                                            </div>";
                                        echo"</div>";
                                    }

                                ?>
                        </div>
                    </form>
                    <div class="div12_footer" style="display: block;">
                            <div class="div13_foo_cont">
                                <div class="div14_btP">
                                    <button class="btn_P"> PREVUIOS </button>
                                </div>
                                <div class="div15_btN div14_btP">
                                    <button class="btn_N btn_P"> NEXT </button>
                                </div>
                            </div>
                            <div class="resp_di_btn_res">
                                <div class="di_btn_res div14_btP">
                                   
                                    <input type="submit" class="btn_res btn_P" id="btn_res" value="afficher le resultat">
                                </div>
                            </div>
                            
                        </div>
                    
          
                </div>
            </div>
            <div class="vice_boos_res">
                <div class="body_res">
                    <div class="di_tit_res">
                        <?php
                            $err_tble=[];
                            $sco_poin=0;
                            $nbr_itm_arr=count($arr_Que);
                            for($s=0;$s<$nbr_itm_arr;$s++){
                                $inp_rad=$_POST['Question_$s'];
                             
                                if($inp_rad==$arr_Que[$s][3]){
                                    $sco_poin++;
                                }else{
                                    $tbl_nstd_err = array(
                                        "nbr_Q" => $s,
                                        "Que" => $arr_Que[$s][1],
                                        "the_err_ans" => $inp_rad,
                                        "the_sol" => $arr_Que[$s][3]
                                    );
                                    
                                    array_push($err_tble, $tbl_nstd_err);
                                }
                            }
                            echo"<h1 class='tith12_res_scor'> le scoores est : $sco_poin </h1>";
                        ?>
                    </div>
                    <div class="di_gif_reac">
                        <?php 
                            switch ($sco_poin) {
                                case '0':
                                case '1':
                                case '2':
                                case '3':
                                    echo"
                                        <div class='di_img_leo'>
                                            <img src='https://media.tenor.com/BWO-_EWYymsAAAAC/well-oh.gif' alt='gif_leo' class='gif_leo'>
                                        </div>
                                    ";
                                    break;
                                case '4':
                                case '5':
                                case '6':
                                case '7':
                                case '8':
                                    echo"
                                        <div class='di_img_mrbean di_img_leo'>
                                            <img src='https://media.tenor.com/i5fhGSgFTmcAAAAM/mr-bean-thumbs-up.gif' alt='gif_mrbean' class='gif_leo gif_mrbean'>
                                        </div>
                                    ";
                                    break; 
                                case '9':
                                case '10':
                                    echo"
                                        <div class='di_img_haverts di_img_leo'>
                                            <img src='https://media.giphy.com/media/9PHdgCKLbfbom8JlXo/giphy.gif' alt='gif_haverts' class='gif_leo gif_haverts'>
                                        </div>
                                    ";
                                    break;       
                                
                                default:
                                    echo"error";
                                    break;
                            }
                        ?>
                    </div>
                    <div class="list_errors">
                        <?php 
                            $nbr_err=count($err_tble);
                            for($d=0;$d<$nbr_err;$d++){
                                echo"
                                    <div class='di_errors'>
                                        <div class='di_header_err'>
                                            <h2 class='tith22_err'> nbr Q est : ". $err_tble[$d]->nbr_Q ." <br> avec le question : ". $err_tble[$d]->Que ." </h2>
                                        </div>
                                        <div class='di_rep_err'>
                                            <h3 class='tit32_yo_ans'> votre reponse est : ". $err_tble[$d]->the_err_ans ." </h3>
                                        </div>
                                        <div class='di_rep_cort'>
                                            <h3 class='tit32_cort_ans'> la bonne reponse est : ". $err_tble[$d]->the_sol ." </h3>
                                        </div>
                                    </div>
                                ";
                            }
                        ?>
                    </div>
                    <div class="di_refaire">
                        <div class="di_btn_refaire">
                            <button class="btn_ref btn_res btn_P"> refaire le quis! </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="backend.js"></script>
    </body>
</html>