import { ApproxStructure } from '@ephox/agar';
import { beforeEach, describe, it } from '@ephox/bedrock-client';
import { TinyHooks } from '@ephox/wrap-mcagar';

import Editor from 'tinymce/core/api/Editor';
import Plugin from 'tinymce/plugins/table/Plugin';
import Theme from 'tinymce/themes/silver/Theme';

import * as TableTestUtils from '../../module/test/TableTestUtils';

describe('browser.tinymce.plugins.table.TableDefaultAttributesTest', () => {
  const hook = TinyHooks.bddSetup<Editor>({
    indent: false,
    plugins: 'table',
    base_url: '/project/tinymce/js/tinymce',
    statusbar: false
  }, [ Plugin, Theme ], true);

  beforeEach(() => {
    hook.editor().setContent('');
  });

  it('TBA: no attributes without setting', async () => {
    const editor = hook.editor();
    await TableTestUtils.pInsertTableViaGrid(editor, 2, 2);
    TableTestUtils.assertTableStructure(editor, ApproxStructure.build((s, str) => s.element('table', {
      styles: {
        'width': str.is('100%'),
        'border-collapse': str.is('collapse')
      },
      attrs: {
        border: str.is('1')
      },
      children: TableTestUtils.createTableChildren(s, str, false)
    })));
  });

  it('TBA: test default title attribute', async () => {
    const editor = hook.editor();
    editor.settings.table_default_attributes = { title: 'x' };
    await TableTestUtils.pInsertTableViaGrid(editor, 2, 2);
    TableTestUtils.assertTableStructure(editor, ApproxStructure.build((s, str) => s.element('table', {
      styles: {
        'width': str.is('100%'),
        'border-collapse': str.is('collapse')
      },
      attrs: {
        border: str.none('Should not have the default border'),
        title: str.is('x')
      },
      children: TableTestUtils.createTableChildren(s, str, false)
    })));
  });
});
