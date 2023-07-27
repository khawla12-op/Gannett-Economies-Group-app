@extends('layouts.layout2')
@section('ListePublication')
<div class="col-md-10">
    <form method="POST" onSubmit="return confirm('confirmation suppression')" action="/wpadmin/listesPublication.php" enctype="multipart/form-data">
    <input type="text" name='type' value='annoncelegale' style='display:none'>
    <table  class="table table-striped table-dark">
            <tr>
                <td class=''>Type</td>
                <td class=''>Text Fourmulaire</td>
                <td>Date</td> 
                                   
            </tr>
                <tr>
                     <td>Annonce Constitution Société A Responsabilité Limitée (SARL)</td>
                     <td><a 
                     style='color:white;'
                     target='_blank' onclick='changeStyle()' href='fourmulaire.php?id=25'>Clicker ici pour aperçu Publication</a></td>
                     <td>2023-07-17</td>
                     </td>
                     </tr><tr>
                     <td>Annonce Constitution Société A Responsabilité Limitée (SARL)</td>
                     <td><a 
                     style='color:white;'
                     target='_blank' onclick='changeStyle()' href='fourmulaire.php?id=24'>Clicker ici pour aperçu Publication</a></td>
                     <td>2023-07-13</td>
                     </td>
                     </tr><tr>
                     <td>Annonce Constitution Société A Responsabilité Limitée (SARL)</td>
                     <td><a 
                     style='color:white;'
                     target='_blank' onclick='changeStyle()' href='fourmulaire.php?id=20'>Clicker ici pour aperçu Publication</a></td>
                     <td>2023-03-16</td>
                     </td>
                     </tr><tr>
                     <td>Annonce Constitution Société A Responsabilité Limitée (SARL)</td>
                     <td><a 
                     style='color:white;'
                     target='_blank' onclick='changeStyle()' href='fourmulaire.php?id=19'>Clicker ici pour aperçu Publication</a></td>
                     <td>2023-03-16</td>
                     </td>
                     </tr><tr>
                     <td>Annonce Constitution Société A Responsabilité Limitée (SARL)</td>
                     <td><a 
                     style='color:white;'
                     target='_blank' onclick='changeStyle()' href='fourmulaire.php?id=18'>Clicker ici pour aperçu Publication</a></td>
                     <td>2023-03-07</td>
                     </td>
                     </tr><tr>
                     <td>Annonce Légale Cession des Parts Sociales et changement de gérant</td>
                     <td><a 
                     style='color:white;'
                     target='_blank' onclick='changeStyle()' href='fourmulaire.php?id=10'>Clicker ici pour aperçu Publication</a></td>
                     <td>2022-04-19</td>
                     </td>
                     </tr><tr>
                     <td></td>
                     <td><a 
                     style='color:white;'
                     target='_blank' onclick='changeStyle()' href='fourmulaire.php?id=9'>Clicker ici pour aperçu Publication</a></td>
                     <td>2022-04-19</td>
                     </td>
                     </tr>                   </table>
             </form>
    </div>     
 </div>
     
<script>
 changeStyle=()=>event.target.style=`color: #ffe400;text-decoration: line-through;`
 </script>
<script src="index.js?t=1491313943542"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection