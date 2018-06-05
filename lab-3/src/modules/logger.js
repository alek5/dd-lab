export const log = (...args) => {
    if(console && console.log) {
        console.log(...args);
    }
}

export default {
    logger: log
}