with(document.myForm) {

    onsubmit = function() {
    	
// les dates étant saisies en français, on les transforme
// Ici sont acceptés comme séparateurs le tiret, le slash et l'espace
	tabdeb = (dateD.value.split(/[- //]/));
	tabfin = (dateF.value.split(/[- //]/));
	Odeb = new Date(tabdeb[2],tabdeb[1],tabdeb[0]);
	Ofin = new Date(tabfin[2],tabfin[1],tabfin[0]);
	if(Odeb > Ofin) {
	    alert ('La date fin ne doit pas être inférieure au début.');
	    dateF.focus(); dateF.style.backgroundColor='#fee';
	    return false;
	};
    };
};