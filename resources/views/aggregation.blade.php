@section("content")

<?php
    while($tabVoitures->hasnext()) {
        $voitureNext = $tabVoitures->next();

        echo "[ ". get_class($voitureNext) ." ]   ";

        echo $voitureNext->nom;
        echo "  :  ";
        echo $voitureNext->prix;
        echo "</br>";
    }

?>

@endsection