@extends('layouts.layout2')
@section('NouveauRapport')

<form method="POST" action="" enctype="multipart/form-data">
    <div class="connexion">
        <div class="row">
            <div class="col-12 ">
                <div class="row">
                    <label for="" class="h5 col-4 mt-1">La caisse:</label> <input required type="number" class="col-7 mt-1 tot" name="reste" id=""></input>
                    <label for="" class="h5 col-4 mt-1">Le reste :</label> <input required type="number" class="col-7 mt-1 tot" name="reste" id="reste"></input>
                    <label for="" class="h5 col-4 mt-1">Les revenus d'aujourd'hui ( Local ):</label><input required  type="number"class="col-7 mt-1  tot"name="Revuns local" id="revenus_local">
                    <label for="" class="h5 col-4 mt-1">Les revenus d'aujourd'hui (à distance) :</label><input required class="col-7 mt-1  tot"  type="number" name="Revenus distance" id="revenus_distance">
                    <label for="" class="h5 col-4 mt-1">Le total D'aujourd'hui:</label><input required class="col-7 mt-1  tot" type="number" name="total" id="total">
                    <label for="" class="h5 col-4 mt-1">Y a-t-il un Nouveau Client :</label><select class="col-7 mt-1" name="client" id="clientSelect">
                        <option value="oui">Oui</option>
                        <option value="no">Non</option>
                    </select>
                    <div id="formFields" style="display: none;">
<label for="nom" class="h5 col-4 mt-1">Nom :</label>
<input type="text" class="col-7 mt-1" name="nom" id="nom">

<label for="numeroTelephone" class="h5 col-4 mt-1">Numéro de téléphone :</label>
<input type="text" class="col-7 mt-1" name="numeroTelephone" id="numeroTelephone">
</div>
                    <label for="" class="h5 col-4 mt-1">Pièce à jointe :</label><input accept='.png, .jpg, .jpeg,,.pdf,.doc,.docx,.xlsx,.xls,.rar,.zip' class="col-7 mt-1" type="file" name="file">
                    <label for="" class="h5 col-4 mt-1">Plus D'informations :</label><textarea class="col-7 mt-1" name="text" id="" cols="30" rows="10"></textarea>
                    <button class="col-md-3" type="submit" name="ajoute">Ajouter Rapport</button>
                </div>

            </div>
        </div>
    </div>
</form>
<script>
    let tot = document.querySelectorAll(".tot")
    chargertot = () => {
        let local = tot[0].value
        let distance = tot[1].value
        let rest = tot[2].value
        let total = parseFloat(parseFloat(local) + parseFloat(distance) + parseFloat(rest)).toFixed(2)
        if (!isNaN(total)) {
            tot[3].value = total
        }


    }
    tot[0].addEventListener("keyup", () => {
        chargertot()
    })
    tot[1].addEventListener("keyup", () => {
        chargertot()
    })
    tot[2].addEventListener("keyup", () => {
        chargertot()
    })
    tot[0].addEventListener("click", () => {
        chargertot()
    })
    tot[1].addEventListener("click", () => {
        chargertot()
    })
    tot[2].addEventListener("click", () => {
        chargertot()
    })
        // Get references to the input elements
const resteInput = document.getElementById("reste");
const revenusLocalInput = document.getElementById("revenus_local");
const revenusDistanceInput = document.getElementById("revenus_distance");
const totalInput = document.getElementById("total");

// Function to calculate and update the total
function updateTotal() {
    
    const reste = parseFloat(resteInput.value);
    const revenusLocal = parseFloat(revenusLocalInput.value);
    const revenusDistance = parseFloat(revenusDistanceInput.value);


    const total = reste + revenusLocal + revenusDistance;

    totalInput.value = total;
}


// Add event listeners to the input elements to trigger the updateTotal function when the values change
resteInput.addEventListener("input", updateTotal);

revenusLocalInput.addEventListener("input", updateTotal);
revenusDistanceInput.addEventListener("input", updateTotal);
//javascript relating to the client select:
const clientSelect = document.getElementById("clientSelect");
const formFields = document.getElementById("formFields");

clientSelect.addEventListener("change", function() {
const selectedValue = this.value;
if (selectedValue === "oui") {
formFields.style.display = "block";
} else {
formFields.style.display = "none";
}
});

 @endsection