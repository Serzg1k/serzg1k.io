<h1>Выступления артистов</h1>

  <table class="table table-bordered">
  <tr>
    <th> Дата </th>
    <th> Место </th>
    <th> Артист </th>
  </tr>

<?php
foreach ($perf as $item) {
    echo '<tr>';
        echo '<td>' . $item->date . '</td>';
        $artists = $item->artist;
        $places = $item->place;
        foreach ($artists as $artist) {
          echo '<td>' . $artist->artname . '</td>';
        	foreach ($places as $place) {
           
              echo '<td>' . $place->placename .  '</td>';
           
        }
    }
    echo '</tr>';
} 
?>
</table>
