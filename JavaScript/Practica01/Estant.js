function Estant(id) {

    this.id = id;
    this.paquet = null;
    this.entrada = null;
    this.sortida = null;

    this.afegirPaquet = afegirPaquet;

    function afegirPaquet(paq) {

        var info = "<p>Afegint paquet a l'Estant ...</p>";
        document.getElementById("log").innerHTML += info;

        this.paquet = paq;
        this.entrada = new Date();

    }

    this.recollirPaquet = recollirPaquet;

    function recollirPaquet() {

        var info = "<p>Llevant paquet de l'Estant ...</p>";
        document.getElementById("log").innerHTML += info;

        this.paquet = null;
        this.sortida = new Date();

    }

    this.imprimirInfo = imprimirInfo;

    function imprimirInfo() {

        var infoPaquet = "";

        if (this.paquet != null) {

            infoPaquet += this.paquet.getInfo() + "<br/>";
            infoPaquet += this.formatEntrada() + "<br/>";

        } else if (this.sortida != null) {

            infoPaquet += "Sense paquet <br/>";
            infoPaquet += this.formatSortida() + "<br/>";

        } else {
            infoPaquet = "No hi ha cap paquet.";
        }

        return "<b>" + this.id + "</b><br/>" + infoPaquet;

    }

    this.formatEntrada = formatEntrada;

    function formatEntrada() {
        return formataData(this.entrada);
    }

    this.formatSortida = formatSortida;

    function formatSortida() {
        return formataData(this.sortida);
    }

    function formataData(d) {
        return d.getHours() + ":" +
            d.getMinutes() + ":" +
            d.getSeconds();
    }

}