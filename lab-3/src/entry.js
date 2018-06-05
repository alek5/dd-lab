import logger, { log } from './modules/logger'
import './scss/main.scss'

log(1, 2, 3, 4, 5, 6)

const myObj = {
    key: 'somevalue'
}

const secondObject = {
    ...myObj
}

console.log(secondObject + 'asd2')