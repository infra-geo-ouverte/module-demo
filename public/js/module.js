require.config({
	paths: {
		'outilDemo': Configuration.uri.modules + '/demo/public/js/outilDemo'
	}
});

this.ajouterCallback(function(e){
	require(['outilDemo'], function(OutilDemo){
		var demo = new OutilDemo();
	});
});