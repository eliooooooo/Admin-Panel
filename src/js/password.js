export function passwordStrength(password) {
    let level = 0;

    if (/[A-Z]/.test(password)) {
        level++;
    }
    if (/[0-9]/.test(password)) {
        level++;
    }
    if (/[^a-zA-Z\d\s]/.test(password)) {
        level++;
    }
    if (password.length > 6) {
        level++;
    }
    if (password.length <= 4) {
        level = 0;
    }

    if(level == 0 || level == 1){
        return 'faible';
    } else if (level == 2 || level == 3){
        return 'moyen';
    } else if (level == 4){
        return 'fort';
    }
}