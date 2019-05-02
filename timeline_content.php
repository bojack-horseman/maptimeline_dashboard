<?php
$str = file_get_contents('timeline_content.json');
// Parsing JSON data
$json = json_decode($str, true);
// Looping through JSON data
foreach ($json as $field => $value) {?>
    <div class="year"><h2><?php echo $value['year'];?></h2>
        <!-- Assigning appropriate values from JSON data-->
        <?php foreach ($value['data'] as $fields => $values) {?>
            <div class="evt">
                <div class="in">
                    <span class="date">
                        <span class="day"><?php echo $values['day'];?></span>
                        <span class="month"><?php echo $values['month'];?></span>
                        <?php if ($values['latitud'] !== '' && $values['latitud'] !== '') {?>
                            <span class="d-none latitud"><?php echo $values['latitud'];?></span>
                            <span class="d-none longitud"><?php echo $values['longitud'];?></span>
                        <?php }?>
                    </span>
                    <h2>Title</h2>
                    <p class="data"><?php echo $values['title'];?></p>
                </div>
            </div>
        <?php }?>
    </div>
<?php }?>
<!--  Looping completed of JSON data -->
