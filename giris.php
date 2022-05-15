

      <?php   
 if(isset($_POST['giris']))
    {
        $ad=$_POST["adi"];
        $sifre=$_POST["sifre"];
        echo"$adi,$sifre"
        echo"hoşgeldiniz..." <br>
        echo"Başarılı bir şekilde giriş yaptınız."
    }
    else
      {
        echo "geçersiz";
      } 

    ?>