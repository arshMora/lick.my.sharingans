<h1>
    <?
        #region
        echo '<p style="color: blue">'."Первое задание".'<p style="color: black">';
        $i = 0;
        while ($i <= 100){
            if ($i % 3 == 0)
            echo $i.' ';
        $i++;
        }
        #endregion

        #region
        echo '<p style="color: blue">'."Второе задание".'<p style="color: black">';
        $i = 0;
        do {
            switch($i){
                case 0:
                    echo "$i - это ноль<br>";
                    break;
                case $i % 2 == 1:
                    echo "$i - нечётное число<br>";
                    break;
                default:
                    echo "$i - чётное число<br>";
            }
            $i++;
        }
        while ($i <= 10);
        #endregion
       
        #region
        echo '<p style="color: blue">'."Третье задание".'<p style="color: black">';
        $mas = [
            "Московская область" => ["Москва", "Зеленоград", "Клин"],
            "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
        ];
        foreach ($mas as $regions => $region){
            echo "$regions =>";
            foreach ($region as $cities){
                echo " $cities |";
            }
            echo "<br>";
        }
        #endregion

        #region
        echo '<p style="color: blue">'."Четвёртое задание".'<p style="color: black">';
        function transliteration($string){
            $translitArray = [
                'а' => 'a','б' => 'b','в' => 'v','г' => 'g','д' => 'd','е' => 'e','ё' => 'yo',
                'ж' => 'zh','з' => 'z','и' => 'i','й' => 'y','к' => 'k','л' => 'l','м' => 'm',
                'н' => 'n','о' => 'o','п' => 'p','р' => 'r','с' => 's','т' => 't','у' => 'u',
                'ф' => 'f','х' => 'h','ц' => 'ts','ч' => 'ch','ш' => 'sh','щ' => 'sch','ъ' => '',
                'ы' => 'y','ь' => '','э' => 'e','ю' => 'yu','я' => 'ya'
            ];
            return strtr(mb_strtolower($string), $translitArray);
        }
        echo transliteration("Четвёртое задание");
        #endregion
       
        #region
        echo '<p style="color: blue">'."Пятое задание".'<p style="color: black">';
        function replaceSpaces($string) {
            return str_replace(' ', '_', $string);
        }

        echo replaceSpaces("Пятое задание");
        #endregion

        #region
        echo '<p style="color: blue">'."Седьмое задание".'<p style="color: black">';
        for ($i = 0; $i < 10; print $i++." ");
        #endregion
        
        #region
        echo '<p style="color: blue">'."Восьмое задание".'<p style="color: black">';
        foreach ($mas as $regions => $region){
            echo "$regions =>";
            foreach ($region as $cities){
                if (substr($cities, 0, 2) == "К")
                echo " $cities |";
            }
            echo "<br>";
        }
        #endregion

        #region
        echo '<p style="color: blue">'."Девятое задание".'<p style="color: black">';
        function transliterationAndSpaceReplaceSpaces($string){
            return replaceSpaces(transliteration($string));
        }
        echo transliterationAndSpaceReplaceSpaces("Девятое задание");
        #endregion
    ?>
</h1>