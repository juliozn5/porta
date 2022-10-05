<style>
    .zoom {
    transition: transform .2s;
    cursor: pointer; 
}

.zoom:hover {
    transform: scale(1.2); 
}
.zoom:active {
    transform: scale(1); 
}



 .file-select {
  position: relative;
  display: inline-block;
}

.file-select::before {
  background-color: #3490dc;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 3px;
  content: 'Selecionar foto'; /* testo por defecto */
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

.file-select input[type="file"] {
  opacity: 0;
  width: 30px;
  height: 23px;
  display: inline-block;
}

#photo::before {
  content: '\f030';
  font-family: "Font Awesome 5 Free" ;
  font-weight: 900;
  font-size: 11px;
}


</style>