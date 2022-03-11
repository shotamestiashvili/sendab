import axios from 'axios';

export default {

    postAvatar (avatar){
        let formData = new FormData();
        formData.append('avatar', avatar);

        return axios({
            method: 'post',
            url: '/api/avatars',
            data: formData,
            headers: { "Content-Type": "multipart/form-data" },
            }
        );
    },

    fetchAvatar(){
        return axios({
                method: 'get',
                url: '/api/getAvatar',
                headers: { "Content-Type": "multipart/form-data" },
            }
        );
    }
}
