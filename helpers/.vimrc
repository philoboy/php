
"配色方案，还可以使用更多的配色方案，但在terminal下没有更多的选择，可选evening
"colorscheme default
"
""使用设色背景下更好的配色方案
set background=dark

"不自动产生备份文件
"set nobackup
"
""设置自动缩进风格为 C/C+\+
"set cindent

set ai
"设置美团代码风格缩进
set tabstop=4
set shiftwidth=4
set softtabstop=4
set expandtab
"
""设置行号
"set number

"设置语法高亮
"syntax on
"
"设置Zen coding 快捷键
"let g:user_zen_settings = {
"\'indentation' : '&nbsp; ',
"\'perl' : {
"\'aliases' : {
"\'req' : 'require '
"\},
"\'snippets' : {
"\'use' : "use strict\nuse warnings\n\n",
"\'warn' : "warn \"\|\";",
"\}
"\}
"\}
"
"let g:user_zen_expandabbr_key = '<c-e>'
"
"let g:use_zen_complete_tag = 1
"
""使用"T"键快速新建标签
map t :tabnew<CR>

"设置标签调装快捷键
"map <S-h> :tabp<CR>
"map <S-l> :tabn<CR>
"
""用<F7>快速打开编辑.vimrc配置文件
map <F7> :tabnew \~/.vimrc<CR>

