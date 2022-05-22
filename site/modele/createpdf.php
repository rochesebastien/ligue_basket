
<?php
require('./librairies/fpdf.php');


foreach ($convoc as $ligne) {


$pdf = new FPDF();
$pdf -> AddPage();
//image
$pdf->Image('./images/convoc_icon.png',6,6,50);
// police
$pdf->SetFont('Arial','B',20);
// Centre le titre
$pdf->Ln(10);
$pdf->SetX((190-40)/2);
// Couleur du texte et du fond du titre
$pdf->SetDrawColor(221,221,221,1);
$pdf->SetFillColor(49, 78, 82);
$pdf->SetTextColor(242, 161, 84);
// Taille du contour
$pdf->SetLineWidth(1);

// Titre
// Cellule (Longueur, Hauteur, Contenu, Bordure, nextline parametters, C=CENTER , Remplissage)
$title = 'Convocation';
$pdf->SetTitle($title);
$pdf->Cell(60, 19, $title, 1, 1, 'C', true);
// Saut de ligne
$pdf->Ln(15);
$pdf->SetFont('Arial','B',15);

//Tableau 1
    //Ligne 1
$pdf->Ln(10);
$pdf->SetX(55);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetX((150-60)/2);
$pdf->Cell(120, 9,'Informations generales', 1, 1, 'C'); 
$pdf->SetX((150-60)/2);
//Ligne 2
$pdf->Cell(60, 10, 'Numero Match :', 1, 0, 'C');
$pdf->Cell(60, 10, $id, 1, 1, 'C');

//Ligne 3
$pdf->SetX((150-60)/2);
$pdf->Cell(60, 10, 'Equipe 1 :', 1, 0, 'C');
$pdf->Cell(60, 10, $ligne->nom_equipe_1, 1, 1, 'C');
//Ligne 4
$pdf->SetX((150-60)/2);
$pdf->Cell(60, 10, 'Equipe 2 :', 1, 0, 'C');
$pdf->Cell(60, 10, $ligne->nom_equipe_2, 1, 1, 'C');


//Tableau 2
    //Ligne 1
$pdf->Ln(10);
$pdf->SetX(55);
$pdf->SetX((150-60)/2);
$pdf->Cell(120, 9,'Arbitre Principal', 1, 1, 'C');
//Ligne 2
$pdf->SetX((150-60)/2);
$pdf->Cell(60, 10, 'Numero Arbitre :', 1, 0, 'C');
$pdf->Cell(60, 10, $ligne->num_arbitre_p, 1, 1, 'C');
//Ligne 3
$pdf->SetX((150-60)/2);
$pdf->Cell(60, 10, 'Nom :', 1, 0, 'C');
$pdf->Cell(60, 10, $ligne->nom_arbitre_principal, 1, 1, 'C');
//Ligne 4
$pdf->SetX((150-60)/2);
$pdf->Cell(60, 10, 'Prenom :', 1, 0, 'C');
$pdf->Cell(60, 10, $ligne->prenom_arbitre_principal, 1, 1, 'C');
//Ligne 5
$pdf->SetX((150-60)/2);
$pdf->Cell(60, 10, 'Montant Prestation :', 1, 0, 'C');
$pdf->Cell(60, 10, $ligne->montant_deplt_p, 1, 1, 'C');

//Tableau 3
    //Ligne 1
$pdf->Ln(10);
$pdf->SetX(55);
$pdf->SetX((150-60)/2);
$pdf->Cell(120, 9,'Arbitre Secondaire', 1, 1, 'C');
//Ligne 2
$pdf->SetX((150-60)/2);
$pdf->Cell(60, 10, 'Numero Arbitre :', 1, 0, 'C');
$pdf->Cell(60, 10, $ligne->num_arbitre_s, 1, 1, 'C');
//Ligne 3
$pdf->SetX((150-60)/2);
$pdf->Cell(60, 10, 'Nom :', 1, 0, 'C');
$pdf->Cell(60, 10, $ligne->nom_arbitre_secondaire, 1, 1, 'C');
//Ligne 4
$pdf->SetX((150-60)/2);
$pdf->Cell(60, 10, 'Prenom:', 1, 0, 'C');
$pdf->Cell(60, 10, $ligne->prenom_arbitre_secondaire, 1, 1, 'C');


//Tableau 4
    //Ligne 1
$pdf->Ln(10);
$pdf->SetX((150-60)/2);
$pdf->Cell(120, 9,'Informations sur le championnat', 1, 1, 'C'); 
$pdf->SetX((150-60)/2);
//Ligne 2
$pdf->Cell(60, 10, 'Numero :', 1, 0, 'C');
$pdf->Cell(60, 10, $ligne->numero_champio, 1, 1, 'C');
//Ligne 3
$pdf->SetX((150-60)/2);
$pdf->Cell(60, 10, 'Nom :', 1, 0, 'C');
$pdf->Cell(60, 10, $ligne->nom_championnat, 1, 1, 'C');


// Positionnement à 1,5 cm du bas
$pdf->SetY(266);
// Police Arial italique 8
$pdf->SetFont('Arial','I',8);
// Numéro de page
$pdf->Cell(0,10,'Page '.$pdf->PageNo(),0,0,'C');


//Nom du fichier (I= valeur par default, Nom, UTF8 BOOLEAN )
$pdf->Output('I','Convocation Match '.$id ,false);
}
?>
