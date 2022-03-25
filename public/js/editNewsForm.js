const form = document.querySelector('#editForm')

window.onload = async (e) => {
  $_token = "{{ csrf_token() }}";

  const id = window.location.href.split('/')[5]
  const domain = window.location.href.split('/')[3]

  const response = await fetch(`127.0.0.1:8000/noticias/edit/${id}}`)
  const result = await response.json();

  document.write(result.html)

}