<html>
    <head>
        <title>PHP</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="well" style="width: 500px; margin: 0 auto; margin-top: 30px;">
            <form method="post">
                <div class="form-group">
                    <label for="lend_word_limit">N value</label>
                    <input type="number" class="form-control" id="lend_word_limit" name="lend_word_limit" placeholder="N value" value="<?php echo $_POST['lend_word_limit']; ?>">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </body>
</html>


<?php
/**
 * 3. Есть текстовый файл.
 * Необходимо удалить из него все слова, длина которых превыщает N символов.
 * Значение N задавать через форму.
 * Проверить работу на кириллических строках - найти ошибку, найти решение.
 */

if ($_POST['lend_word_limit'])
{
    $text=file_get_contents("3.txt");
    //echo $text;
    $lend_word_limit=$_POST['lend_word_limit'];
    $words= explode(' ', $text);
    //print_r($words);
    $final_words= array();
    foreach ($words as $word){
    //    echo mb_strlen($word);
    //    echo "<br>";
        $lend_word=mb_strlen($word);

        if ($lend_word != $lend_word_limit ){
    //        echo $word;
    //        echo "<br>";
            $final_words[]=$word;
        }


    }
    $new_text= implode(' ', $final_words);
    //echo $new_text;
    file_put_contents("3new.txt", $new_text);
}
