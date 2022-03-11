import avatar from '../../helpers/avatar';

export const state = {
    avatarAdded: {},
    avatarAddedStatus: 0,
    avatar: null,

}
export const mutations = {
    setAvatarAddedStatus(state, value){
        state.avatarAddedStatus = value;
    }
}
export const actions = {

    ADD_AVATAR( { commit, state, dispatch }, data ){
        commit( 'setAvatarAddedStatus', 1 );
        avatar.postAvatar(data)
            .then( ( response ) => {
                commit( 'setAvatarAddedStatus', 2 );
                console.log(response);
                // dispatch( 'loadAvatar' );
            })
            .catch( () => {
                commit( 'setAvatarAddedStatus', 3 );
            });
    },

    GET_AVATAR(context) {
        avatar.fetchAvatar().then((response) => {
            state.avatar = response.data.data;
            console.log(response.data.data);
        });
    }

}
export const getters = {

}
