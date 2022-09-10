=
		function handleFiles(files) {
    if (files.length) {
        var file = files[0];
        var reader = new FileReader();
        if (/text\/\w+/.test(file.type)) {
            reader.onload = function() {
                $('<pre>' + this.result + '</pre>').appendTo('body');
            }
            reader.readAsText(file);
        }
    }
}
	