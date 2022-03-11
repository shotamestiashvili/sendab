import document from '../../helpers/document';

export const state = {
    documentAdded: {},
    documentAddedStatus: 0,

}
export const mutations = {
    setDocumentAddedStatus(state, value){
        state.documentAddedStatus = value;
    }
}
export const actions = {

    ADD_DOCUMENT( { commit, state, dispatch }, form ){

        commit( 'setDocumentAddedStatus', 1 );

        document.postDocument( form )
            .then( ( response ) => {

                commit( 'setDocumentAddedStatus', 2 );
            })
            .catch( () => {
                commit( 'setDocumentAddedStatus', 3 );
            });
    },
}
export const getters = {

}
