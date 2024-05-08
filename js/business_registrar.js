function gravaUsuario(formData, callback) {
    formData.append("funcao","grava")
  $.ajax({
    url: 'sql/sqlscope_registrar.php',
    type: 'post',
    data: formData,
    processData: false,
    contentType: false,
      success: results => callback(results)
  })
}

