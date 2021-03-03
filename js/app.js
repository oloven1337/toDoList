const addItemBtn = document.querySelector('.add-item')
const removeItemBtn = document.querySelector('.remove-item')
const listGroupItems = document.querySelectorAll('.list-group__item')
const parentItems = document.querySelector('.list-group__items')
const inputAddTask = document.querySelector('.input_add-remove')

function inputChange(input) {
  console.log(this.input)
  input.value = ''
  input.placeholder = ''
  input.style.borderColor = '#0a8f63'
  input.style.outlineColor = '#0a8f63'
}

function liAppendChild(li, span, spanDel) {
  li.appendChild(span)
  li.appendChild(spanDel)
  parentItems.appendChild(li)
  span.textContent = inputAddTask.value
  spanDel.textContent = 'Удалить'
  spanDel.style.cursor = 'pointer'
  li.style.display = 'flex'
  li.style.justifyContent = 'space-between'

}

function spanDelAddEvents(spanDel, li) {
  spanDel.addEventListener('click', () => {
    li.remove()
  })
}

addItemBtn.addEventListener('click', createElement)

function createElement() {
  if (!inputAddTask.value == '') {
    let li = document.createElement('li')
    let span = document.createElement('span')
    let spanDel = document.createElement('span')

    liAppendChild(li, span, spanDel)
    inputChange(inputAddTask)
    spanDelAddEvents(spanDel, li)
  }

  else {
    inputAddTask.placeholder = 'Please, enter some text'
    inputAddTask.style.borderColor = 'red'
    inputAddTask.style.outlineColor = 'red'
  }
}





// const addItemBtn = document.querySelector('.add-item')
// const removeItemBtn = document.querySelector('.remove-item')
// const listGroupItems = document.querySelectorAll('.list-group__item')
// const parentItems = document.querySelector('.list-group__items')
// const inputAddTask = document.querySelector('.input_add-remove')

// addItemBtn.addEventListener('click', createElement)

// function createElement() {
//   if (!inputAddTask.value == '') {
//     let li = document.createElement('li')
//     let span = document.createElement('span')
//     let spanDel = document.createElement('span')
//     li.className = 'list-group__item'
//     parentItems.appendChild(li)
//     span.textContent = inputAddTask.value
//     spanDel.textContent = 'Удалить'
//     li.appendChild(span)
//     li.appendChild(spanDel)
//     li.style.display = 'flex'
//     li.style.justifyContent = 'space-between'

//     inputChange(inputAddTask)
//   }
//   else {
//     inputAddTask.placeholder = 'Please, enter some text'
//     inputAddTask.style.borderColor = 'red'
//     inputAddTask.style.outlineColor = 'red'
//   }
// }

// function inputChange(input) {
//   this.input.value = ''
//   this.input.placeholder = ''
//   this.input.style.borderColor = '#0a8f63'
//   this.input.style.outlineColor = '#0a8f63'
// }