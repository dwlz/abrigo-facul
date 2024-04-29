function gravarCentroCusto(formData, callback) {
    formData.append("funcao","grava")
  $.ajax({
    url: 'js/sqlscope_registrar.php',
    type: 'post',
    data: formData,
    processData: false,
    contentType: false,
      success: results => callback(results)
  })
}

