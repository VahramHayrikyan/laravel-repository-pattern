/**
 * Created by Work on 30/11/2016.
 */

Vue.component('like', {
    props: [
        'likeUrl',
        'likeStatus',
        'totalRating'
    ],

    data: function(){
        return {
            status: this.likeStatus,
            rawRating: Number(this.totalRating) - Number(this.likeStatus),
            rating: Number(this.totalRating)
        }
    },

    methods: {
        like: function(){
            var rating = this.status == 1 ? 0 : 1;
            var that = this;

            $.ajax({
                async: false,
                url: this.likeUrl,
                data: {rating: rating}
            }).done(function(){
                that.status = rating;
                that.rating = that.rawRating + that.status;
            });
        },
        dislike: function(){
            var rating = this.status == -1 ? 0 : -1;
            var that = this;

            $.ajax({
                async: false,
                url: this.likeUrl,
                data: {rating: rating}
            }).done(function(){
                that.status = rating;
                that.rating = that.rawRating + that.status;
            });
        },

        likeClass: function () {
            return this.status == 1 ? 'btn-success' : 'btn-default';
        },
        dislikeClass: function () {
            return this.status == -1 ? 'btn-danger' : 'btn-default';
        },
        ratingClass: function () {
            if (this.rating > 0)
                return 'text-success';
            else if (this.rating < 0)
                return 'text-danger';
        },
        ratingText: function () {
            if (this.rating > 0)
                return '+' + this.rating;
            else
                return this.rating;
        }
    }

});