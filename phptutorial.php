<?php
 
    $raw = '21.01.1976';
    $start = DateTime::createFromFormat('d.m.Y', $raw);
    echo "data de inicio: ".$start->format('Y-m-d'). "\n";
    $end = clone $start;
    $end->add(new DateInterval('P1M6D'));
    echo "<br>";
    $diff = $end->diff($start);
    echo "Diferença: ".$diff->format('%m mês, %d dias (total: %a dias)'). "<br>";
    //Diferença: 1 mês, 6 dias (total: 37 dias)
 
    if($start < $end) {
        echo "Começa antes do fim!<br>";
 
    }
    // mostra todas as quintas-feiras entre $start e $end
    $periodinterval = Dateinterval::createFromDateString('first thursday');
    $perioditerator = new DatePeriod($start, $periodinterval, $end, DatePeriod::EXCLUDE_START_DATE);
    foreach($perioditerator as $date) {
            //mostra cada data periodo
            echo "<br>";
            echo $date->format('d-m-Y')." ";
    $raw = '21. 01. 1975';
    $start = DateTime::createFromFormat('d. m. Y', $raw);
    echo "Data de inicio: ". $start->format('Y-m-d')."<br>";
    //cria uma cópia de $start e adiciona um mês e 6 dias
    $end= clone $start;
    $end->add(new DateInterval('P1M6D'));
    $diff= $end->diff($start);
    echo "Diferença: ". $diff->format('%m mês, %d dias (total: %a dias)'). "<br>";
    //Diferença: 1 mês, 6 dias (total: 37 dias)
    if($start < $end) {
            echo "Começa antes do fim!<br>";
    }
    //mostra todas as quintas-feiras entre $start e $end
    $periodInterval= DateInterval::createFromDateString('first thursday');
    $perioditerator= new DatePeriod($start, $periodInterval, $end, DatePeriod::EXCLUDE_START_DATE);
    foreach($perioditerator as $date) {
            //mostra cada data no periodo
            echo $date->format('d-m-Y')."<br>";
 
 
    }
}
?>