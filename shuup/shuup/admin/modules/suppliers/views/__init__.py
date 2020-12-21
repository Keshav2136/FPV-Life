# -*- coding: utf-8 -*-
# This file is part of Shuup.
#
# Copyright (c) 2012-2020, Shoop Commerce Ltd. All rights reserved.
#
# This source code is licensed under the OSL-3.0 license found in the
# LICENSE file in the root directory of this source tree.
from .delete import SupplierDeleteView
from .edit import SupplierEditView
from .list import SupplierListView

__all__ = ["SupplierDeleteView", "SupplierEditView", "SupplierListView"]