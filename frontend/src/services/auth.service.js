import httpClient from './http.service.js';
import router from '../router';

const authService = {
    currentUser: null,
    async login(formData) {
        try {
            const{status, data} = await httpClient.post('user/login', formData);
            if (status == 200) {
                localStorage.setItem('ACCESS_TOKEN', data.access_token)
            }
            return {
                success: true
            }
        } catch(e) {
            return {
                success: false,
                errors: e.response.data.errors
            }
        }
    },
    async register(formData) {
        try {
            const{status, data} = await httpClient.post('user/signup', formData);
            if (status == 200) {
                localStorage.setItem('ACCESS_TOKEN', data.access_token)
            }
            return {
                success: true
            }
        } catch(e) {
            return {
                success: false,
                errors: e.response.data.errors
            }
        }
    },
    async getUser() {
        try {
            if (!this.currentUser) {
                const {status, data} = await httpClient.get('/user/data');
                if (status === 200) {
                    this.currentUser = data;
                }
            }

        } catch (e) {
            return null;
        }

        return this.currentUser;
    },
    isLoggedIn() {
        return !!localStorage.getItem('ACCESS_TOKEN');
    },
    getToken() {
        return localStorage.getItem('ACCESS_TOKEN');
    },
    logout() {
        localStorage.removeItem('ACCESS_TOKEN');
        router.push('/login');
    }
};

export default authService;
