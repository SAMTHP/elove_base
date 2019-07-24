$(document).ready(function() {

    // Array which save the formations
    var formation = ["CDA","Mécanicens","SSI","Assistant comptable","Commercial","Maçon","Développeur web","Designer web"];

    formation.forEach(function(formation){
        var cursus = "<option>"+formation+"</option>";
        $("#formations").append(cursus)
        console.log(formation)
    })
        
});