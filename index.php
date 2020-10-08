<?php

$name ='Damian';

echo $name;
echo '<br>';

$birth_month='08';

echo $birth_month;
echo '<br>';

$birth_day='12';
echo $birth_day;
echo '<br>';

$birth_date=  $birth_month.'-' . $birth_day;
echo $birth_date;
echo '<br>';
var_dump ($birth_date);
echo '<br>';
define ("DATE_OF_BIRTH_FORMAT","m-d");
echo DATE_OF_BIRTH_FORMAT;
echo '<br>';
$today=date(DATE_OF_BIRTH_FORMAT);
echo $today;
echo '<br>';

var_dump ($today);
echo '<br>';

$birth_year=1973;
echo $birth_year;
echo '<br>';

$this_year= date('Y');
echo $this_year;
echo '<br>';


// if ($birth_date>$today){
//     echo "${name} will turn ".($this_year - $birth_year).'this year';
// } else {
//     echo "${name} will turned ".($this_year - $birth_year).'this year';
// };

function getBirthdaySentence($name,$birth_year,$year){
    return 'In the year '.$year.' '.$name.' turned '.($year-$birth_year).'.';
};
for ($year = $birth_year; $year <= $this_year; $year++) {

    echo getBirthdaySentence($name, $birth_year, $year) . '<br>';

};