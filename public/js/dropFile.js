const bannerArea = document.querySelector('.drop-zone');
const bannerInput = document.querySelector('#banner-input-file')
const bannerLabel = document.querySelector('#banner-label')


bannerArea.ondragcenter = (e) => e.preventDefault()
bannerArea.ondragstart = (e) => e.preventDefault()
bannerArea.ondragend = (e) => e.preventDefault()
bannerArea.ondragleave = (e) => e.preventDefault()
bannerArea.ondragover = (e) => e.preventDefault()
bannerArea.ondrag = (e) => e.preventDefault()

function updateThumbnail(file) {

  let thumbnailElement = document.querySelector('.image-input-preview')
 
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add('image-input-preview')
    bannerArea.appendChild(thumbnailElement);
  }


  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}


bannerArea.onclick = (e) => bannerInput.click()

function isImage(target, isEvent) {
  const isValid = target.type.startsWith('image')
  console.log(target)

  if (!isValid) {
    bannerLabel.innerHTML = `Você só pode enviar imagens neste campo!`
    bannerArea.style.border = '1px dashed red'
    document.querySelector('input[type="file"]').value = ''
    document.querySelector('.image-input-preview').remove()
  } else {
    bannerArea.style.border = '1px dashed #b3b3b5'
  }

  return isValid;
}


bannerArea.addEventListener("drop", (e) => {
  e.preventDefault()
  const image = e.dataTransfer.files[0];
  const isValid = isImage(image, true)
  
  if (!isValid) return
  

  if (e.dataTransfer.files.length) {
    const image = e.dataTransfer.files[0]
    bannerLabel.innerHTML = `Você está enviando ${image.name} /${((image.size/1024)/1024).toFixed(2)}mb como banner`
    console.log(image)
    bannerInput.files = e.dataTransfer.files;
  }

  updateThumbnail(image);

})

bannerInput.addEventListener("change", (e) => {
  const isValid = isImage(bannerInput.files[0])
  
  if (!isValid){
    return
  }

  if (bannerInput.files.length) {
    
    const image = e.target.files[0]
    bannerLabel.innerHTML = `Você está enviando ${image.name} /${((image.size/1024)/1024).toFixed(2)}mb como banner`
  }

  updateThumbnail(bannerInput.files[0]);
})

