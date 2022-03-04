/**
 * ローカルサーバーの立ち上げ
 */

const gulp = require("gulp");
const config = require("../config");
const setting = config.setting;
const $ = require("gulp-load-plugins")(config.loadPlugins);

gulp.task("serve", () => {
	$.browserSync({
		url: "localhost",
		port: 4010,
		proxy: setting.server.localUrl
	});

	// gulp.watch（ファイル監視）
	gulp.watch(setting.html.dest + "**/*.php", ["php"]);
	gulp.watch(setting.css.src + "**/*.scss", ["scss"]);
	gulp.watch(setting.js.src + "**/*.js", ["script"]);

});

gulp.task("disconnect", () => {
	$.php.closeServer();
});
