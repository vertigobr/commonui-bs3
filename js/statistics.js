$('#allOcorrencias').empty();
$('#allColecoes').empty();
$('#allInstituicoes').empty();
$('#allConjuntos').empty();

$(document).ready(function () {
    $.ajax({url: "https://www.collectory.ala-dev.vertigo.com.br/collectory/ws/institution/count"})
        .done(function (data) {
            $('#allInstituicoes').append(data.total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));
        })
        .fail(function (data) {
            $('#allInstituicoes').append("0");
        });
});
$(document).ready(function () {
    $.ajax({url: "https://www.collectory.ala-dev.vertigo.com.br/collectory/ws/collection/count"})
        .done(function (data) {
            $('#allColecoes').append(data.total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));
        })
        .fail(function (data) {
            $('#allColecoes').append("0");
        });
});
$(document).ready(function () {
    $.ajax({url: "https://www.collectory.ala-dev.vertigo.com.br/collectory/ws/dataResource/count"})
        .done(function (data) {
            $('#allConjuntos').append(data.total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));
        })
        .fail(function (data) {
            $('#allConjuntos').append("0");
        });
});
$(document).ready(function () {
    $.ajax({url: "https://www.biocache-service.ala-dev.vertigo.com.br/biocache-service/occurrences"})
        .done(function (data) {
            $('#allOcorrencias').append(data.totalRecords.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));
        })
        .fail(function (data) {
            $('#allOcorrencias').append("0");
        });
});