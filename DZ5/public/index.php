<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoGallery</title>
</head>
<body>
    <div class="gallery">
        <?php
            /* 1.  Создать галерею изображений, состоящую из двух страниц:
                просмотр всех фотографий (уменьшенных копий);
                просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных.
            2.  В базе данных создать таблицу, в которой будет храниться информация о картинках (адрес на сервере, размер, имя).
            3. *На странице просмотра фотографии полного размера под картинкой должно быть указано число ее просмотров.
            4. *На странице просмотра галереи список фотографий должен быть отсортирован по популярности. 
            Популярность = число кликов по фотографии.
            */

            $link = mysqli_connect('localhost', 'root', 'root', 'images');
            //var_dump($link);
            if ($link) {
                $query = "SELECT id, url, name FROM images ORDER BY view_count DESC";
                $query = mysqli_real_escape_string($link, $query);
                $result = mysqli_query($link, $query);
                while($row = mysqli_fetch_assoc($result)){
                    $img_id = $row['id'];
                    $img_url = $row['url'];
                    $img_name = $row['name'];
                    //var_dump($img_url);
                    echo '<a href ="' . $img_id . '"  target="_blank"><img src = "' . $img_url . $img_name . '"></a>';
                }
                mysqli_close($link);
            } else {
                die('Couldn’t connect to DB');
            }
        ?>
    </div>
</body>
</html>