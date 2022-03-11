import axios from 'axios';
import Swal from 'sweetalert2';

export default {

    postDocument (form){

        let formData = new FormData();

        formData.append('front', form.frontId);
        formData.append('back', form.backId);
        formData.append('selfie', form.selfie);

        return axios({
                method: 'post',
                url: '/api/documents',
                data: formData,
                headers: { "Content-Type": "multipart/form-data" },
            }
        ).then((response) => {
            Swal.fire('Documents Uploaded');
        }).catch((e) => {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Could not upload documents, please try again or call to support team',
                footer: e.data
            })
        });
    }
}
