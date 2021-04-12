const addItemBtn = document.querySelector('.add-item')
const removeItemBtn = document.querySelector('.remove-item')
const listGroupItems = document.querySelectorAll('.list-group__item')
const parentItems = document.querySelector('.list-group__items')
const inputAddTask = document.querySelector('.input_add-remove')
const deleteAllTasks = document.querySelector('.remove-item')

// Events

function spanDelAddEvents(spanDel, li) {
  spanDel.addEventListener('click', () => {
    li.remove()
  })
}

addItemBtn.addEventListener('click', createElement)

deleteAllTasks.addEventListener('click', () => {
  document.querySelectorAll('.task_item').forEach((elem) => elem.remove())
})

// function spanEditTxt(span, li) {
//   span.addEventListener('click', () => {

//     if (!span.querySelector('input')) {
//       let da = span.innerHTML
//       let input = document.createElement('input')
//       span.innerHTML = ''
//       span.appendChild(input)
//       input.value = da
//       // span.remove()
//       // li.appendChild(input)
//       // console.log(li.children)
//       // console.log(li)
//       // li.innerHTML[0].appendChild('input')
//     }
//   })
// }

// function saveEdit(input, span) {
//   input.addEventListener('click', () => {
//     let da = input.value

//     input.remove()
//     span.innerHTML = 'da'
//   })
// }

/////////// Functions

function inputChange(input) {
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

function createElement() {
  if (inputAddTask.value !== '') {
    let li = document.createElement('li')
    let span = document.createElement('span')
    let spanDel = document.createElement('span')

    li.className = 'task_item'
    liAppendChild(li, span, spanDel)
    inputChange(inputAddTask)
    spanDelAddEvents(spanDel, li)
    // spanEditTxt(span, li)
  }

  else {
    inputAddTask.placeholder = 'Please, enter some text'
    inputAddTask.style.borderColor = 'red'
    inputAddTask.style.outlineColor = 'red'
  }
}