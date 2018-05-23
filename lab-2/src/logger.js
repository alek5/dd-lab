export const logger = (...args) => { // Именованный export модуля для работы с ним из другого места
    if(console && console.log) {
        console.log(...args);
    }
}