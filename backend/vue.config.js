const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true,
  // 禁用Eslint
  lintOnSave: false,
  // 告訴資源應該去哪邊存取需要預設一個跟目錄，'./'表示用相對路徑去找資源
  publicPath: './'
})
