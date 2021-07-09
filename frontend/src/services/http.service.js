import axios from 'axios';
import authService from "./auth.service";
import router from '../router';

/** Default config for axios instance */
let config = {
    baseURL: `http://localhost:8080/api/`
};

/** Creating the instance for axios */
const httpClient = axios.create(config);

/** Auth token interceptors */
const authInterceptor = config => {
    config.headers.Authorization = `Bearer ${authService.getToken()}`;
    return config;
};

/** Adding the request interceptors */
httpClient.interceptors.request.use(authInterceptor);

/** Adding the response interceptors */
httpClient.interceptors.response.use(
    response => {
        return response;
    },
    error => {
        if (error.response.status === 401) {
            router.push({name: 'login'});
        }

        return Promise.reject(error);
    }
);

export default httpClient;
