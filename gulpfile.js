const gulp = require("gulp");
const cleanCSS = require("gulp-clean-css");
const uglify = require("gulp-uglify-es").default;
var rename = require('gulp-rename');

function minifyCSS() {
    return (
        gulp.src("./src/styles/*.css")
            .pipe(cleanCSS())
            .pipe(rename({ suffix: '.min' }))
            .pipe(gulp.dest("./src/assets"))
    );
}

function minifyJS() {
    return (
        gulp.src("./src/scripts/*.js")
            .pipe(uglify())
            .pipe(rename({ suffix: '.min' }))
            .pipe(gulp.dest("./src/assets"))
    );
}

gulp.task("watch", () => {
    gulp.watch("./src/styles/*.css", minifyCSS);
    gulp.watch("./src/scripts/*.js", minifyJS);
});

gulp.task("minify-css", minifyCSS);

gulp.task("minify-js", minifyJS);

gulp.task('default', gulp.series('minify-css' , 'minify-js' , 'watch'));